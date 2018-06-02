/* eslint-disable */

(function(document, window){

  const BlueprintBookmarklet = {
    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    appHost: _blueprint_url,
    containerId: 'BlueprintAGFA',
    data: {
      images: [],
      name: '',
      price: 0
    },
    metaTags: {},
    debug: (window.location.host !== 'www.gyftlists.com'),

    init: function() {
      this.loadMetaTags();

      if (!document.getElementById(this.containerId)) {
        this.parseData();
        this.createModal();
      }
    },

    loadMetaTags: function(){
      const tags = document.getElementsByTagName('meta');

      if (tags.length) {
        for (var i = 0; i < tags.length; i++) {

          const key = tags[i].name || tags[i].getAttribute('itemprop') || tags[i].getAttribute('property');
          const content = tags[i].getAttribute('content');

          if (key && content) {
            this.metaTags[key] = content;
          }
        }
      }
    },

    createModal: function() {
      const container = document.createElement('div');

      const containerStyle = [
        {prop: 'position', value: 'fixed'},
        {prop: 'left', value: '10px'},
        {prop: 'top', value: '0px'},
        {prop: 'overflow', value: 'hidden'},
        {prop: 'padding', value: '5px'},
        {prop: 'border', value: '0px'},
        {prop: 'z-index', value: '99999'},
        {prop: 'background-color', value: 'transparent'},
        {prop: 'display', value: 'inline-table'},
        {prop: 'outline', value: '0px'},
        {prop: 'background-position', value: 'initial initial'},
        {prop: 'background-repeat', value: 'initial initial'},
      ];

      container.setAttribute('id', this.containerId);
      container.setAttribute('style', containerStyle.map(function (elem) {
        return elem.prop + ':' + elem.value + ';'
      }).join(''));

      const iframe = document.createElement('iframe');

      const iframeStyle = [
        {prop: 'right', value: '10px'},
        {prop: 'top', value: '10px'},
        {prop: 'width', value: '500px'},
        {prop: 'height', value: '550px'},
        {prop: 'border-style', value: 'none'},
        {prop: 'overflow', value: 'hidden'},
        {prop: 'z-index', value: '99999'},
        {prop: 'background-color', value: 'transparent'},
        {prop: 'display', value: 'block'}
        // {prop: 'box-shadow', value: '0 5px 15px rgba(0, 0, 0, 0.5)'}
      ];

      iframe.setAttribute('src', this.buildUrl());
      iframe.setAttribute('frameBorder', '0');
      iframe.setAttribute('id', 'blueprint_iframe');
      iframe.setAttribute('allowTransparency', 'true');
      iframe.setAttribute('style', iframeStyle.map(function (elem) {
        return elem.prop + ':' + elem.value + ';'
      }).join(''));

      const that = this;
      iframe.onload = function() { that.awaitPostMessage(); };

      container.appendChild(iframe);
      document.body.appendChild(container);
    },

    parseData: function () {
      const name = this.getName();

      this.data.name = name ? name.substr(0, 100).replace(/^\s+|\s+$/g, '') : '';
      this.data.price = this.getPrice();
      this.data.images = this.getImages();
    },

    getName: function () {
      // Try to parse structured data
      const schemaSelector = document.querySelector('[itemtype=\'http://schema.org/Product\'] [itemprop=\'name\']');
      const schemaName = schemaSelector ? schemaSelector.textContent : null;

      if (this.debug) {
        console.log('Name[schema]: ', schemaName);
      }

      if (schemaName) {
        return schemaName;
      }

      if (this.debug) {
        console.log('Name[opengraph]: ', this.metaTags['og:title']);
      }

      // Try to parse OpenGraph tag
      if (this.metaTags.hasOwnProperty('og:title')) {
        return this.metaTags['og:title'];
      }

      if (this.debug) {
        console.log('Name[meta_title]: ', this.metaTags['title']);
      }

      // Try to get title from meta tag
      if (this.metaTags.hasOwnProperty('title')) {
        return this.metaTags['title'];
      }

      if (this.debug) {
        console.log('Name[title]: ', document.title);
      }

      // Get document title
      return document.title;
    },

    getPrice: function () {
      var price = 0;

      // Try to parse structured data
      const schemaSelector = document.querySelector('[itemtype=\'http://schema.org/Offer\'] [itemprop=\'price\']');
      const schemaPrice = schemaSelector ? schemaSelector.innerHTML : null;

      if (this.debug) {
        console.log('Price[schema]: ', schemaPrice);
      }

      if (schemaPrice) {
        const priceRaw = schemaPrice.match(/([0-9,.]{2,})/);

        if (priceRaw && priceRaw.length > 1) {
          price = parseFloat(priceRaw[1].replace(',', ''));

          return price;
        }
      }

      // Try to parse retailer-specific HTML
      const specificSelector = document.querySelector('#priceblock_ourprice, .jsProductPrice .salePrice,' +
          ' .jsProductPrice .regPrice, .price-amount, .pb-purchase-price, .standard-price, .ProductPricing,' +
          ' .regular-price, [data-test="product-price"]');
      const specificPrice = specificSelector ? specificSelector.innerHTML : null;

      if (this.debug) {
        console.log('Price[retailer]: ', specificPrice);
      }

      if (specificPrice) {
        const priceRaw = specificPrice.match(/([0-9,.]{2,})/);

        if (priceRaw && priceRaw.length > 1) {
          price = parseFloat(priceRaw[1].replace(',', ''));

          return price;
        }
      }

      // Try to parse HTML
      const htmlPrice = document.querySelector('[class*=\'pric\']') ? document.querySelector('[class*=\'pric\']').innerHTML : null;

      if (this.debug) {
        console.log('Price[html]: ', htmlPrice);
      }

      if (htmlPrice) {
        const priceRaw = htmlPrice.match(/([0-9,.]{2,})/);

        if (priceRaw && priceRaw.length > 1) {
          price = parseFloat(priceRaw[1].replace(',', ''));
        }
      }

      return price;
    },

    getImages: function () {
      var images = [];
      var imagesRaw = [];

      // Parse Amazon images
      if (location.hostname.match(/amazon\.com/)) {

        var script = '';
        var colorImages = [];

        for (var i = 0, len = document.scripts.length; i < len; i++) {
          if (document.scripts[i].text.match(/['"]colorImages['"] ?:/)) {
            script = document.scripts[i].text;
            break;
          }
        }

        const tempArray = script.split("\n");
        if (tempArray.length) {
          for (var i = 0, length = tempArray.length; i < length; i++) {
            if (tempArray[i].match(/['"]colorImages['"] ?:/)) {
              try {
                colorImages = JSON.parse('{' + tempArray[i].slice(0, -1).replace(/\s{2,}/g, '').replace(/'/g, '"') + '}').colorImages;
              } catch(e) {}
              break;
            }
          }
        }

        if (colorImages && colorImages.initial) {
          for (var i = 0, len = colorImages.initial.length; i < len; i++) {
            if (colorImages.initial[i].large) {
              images.push(colorImages.initial[i].large);
            }
          }
        }
      }

      // Try to parse OpenGraph tag
      if (this.metaTags.hasOwnProperty('og:image')) {
        images.push(this.metaTags['og:image']);
      }

      // Try to parse structured data
      const schemaSelector = document.querySelector('[itemtype=\'http://schema.org/Product\'] [itemprop=\'image\']');
      const schemaImage = schemaSelector ? (schemaSelector.src || schemaSelector.href) : null;

      if (schemaImage) {
        images.push(schemaImage);
      }

      // Try to get images from HTML
      const searchImages = document.getElementsByTagName('img');

      for (var i = 0; i < searchImages.length; i++) {
        const imgWidth = searchImages[i].naturalWidth;
        const imgHeight = searchImages[i].naturalHeight;

        if (searchImages[i].src.length && !/script|\.gif|~|loading/i.test(searchImages[i].src) && /^http/.test(searchImages[i].src)) {
          if (imgWidth > 100 && imgHeight > 100) {
            imagesRaw.push(searchImages[i]);
          }
        }
      }

      if (imagesRaw.length) {

        imagesRaw.sort(function (img1, img2) {
          return (img2.naturalWidth + img2.naturalHeight) - (img1.naturalWidth + img1.naturalHeight);
        });

        for (var k = 0; k < imagesRaw.length; k++) {
          images.push(imagesRaw[k].src);
        }

        var temp = [];
        for (var i = 0; i < images.length; i++) {
          if (temp.indexOf(images[i]) === -1 && images[i] !== '') {
            temp.push(images[i]);
          }
        }

        images = temp.slice(0, 10);
      }

      return images;
    },

    buildUrl: function() {
      return this.appHost + 'SingleImport/single?url=' + encodeURIComponent(window.location.href) + '&data=' + this.encode(JSON.stringify(this.data));
    },

    awaitPostMessage: function() {
      const that = this;

      window.addEventListener('message', function(event) {
        if(event.origin === that.appHost && event.data === 'close_frame') {

          const container = document.getElementById(BlueprintBookmarklet.containerId);
          if (container) {
            container.parentElement.removeChild(container);
          }
        }
      });
    },

    // Base64 encoding with UTF-8 support
    encode: function (input) {
      var output = '';
      var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
      var i = 0;

      input = this._utf8_encode(input);

      while (i < input.length) {
        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2)) {
          enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
          enc4 = 64;
        }

        output = output +
          this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
          this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
      }
      return output;
    },

    _utf8_encode: function (string) {
      var utftext = '';
      string = string.replace(/\r\n/g, "\n");

      for (var n = 0; n < string.length; n++) {
        var c = string.charCodeAt(n);

        if (c < 128) {
          utftext += String.fromCharCode(c);
        } else if ((c > 127) && (c < 2048)) {
          utftext += String.fromCharCode((c >> 6) | 192);
          utftext += String.fromCharCode((c & 63) | 128);
        } else {
          utftext += String.fromCharCode((c >> 12) | 224);
          utftext += String.fromCharCode(((c >> 6) & 63) | 128);
          utftext += String.fromCharCode((c & 63) | 128);
        }
      }
      return utftext;
    }
  };

  BlueprintBookmarklet.init();

})(document, window);

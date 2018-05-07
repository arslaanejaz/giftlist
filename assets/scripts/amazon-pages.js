var casper = require('casper').create(
    {
        clientScripts: ["./assets/scripts/inc/jq.js", "./assets/scripts/inc/custom.js" ],
        waitTimeout: 80000,
        stepTimeout: 80000,
        verbose: true,
        pageSettings: {
            webSecurityEnabled: false
        },
        onWaitTimeout: function() {
            this.echo('** Wait-TimeOut **');
        },
        onStepTimeout: function() {
            this.echo('** Step-TimeOut **');
        }
   }
);
var url = casper.cli.args[0]+'/'+casper.cli.args[1];
var baseUrl = casper.cli.args[0]+'/';
var pageNumber = casper.cli.args[2];
var x = require('casper').selectXPath;
// var url = "https://www.google.com/";
casper.start().then(function() {
    this.open(url, {
        method: 'get',
        headers: {
            // 'Accept': 'application/json'
        }
    });
});

casper.waitForSelector(".a-normal",function() {

    this.thenClick(x('//li[contains(@class, \'a-normal\') and contains(.//a, "'+pageNumber+'")]')).then(function(){
        this.waitForSelector(".a-normal", function () {
            pageData = this.evaluate(function(baseUrl){
                arr = [];
                grid = document.querySelectorAll('.wr-product-grid-card');
                arr.push(Array.prototype.map.call(grid, function(div, i) {
                    return {
                        'id': i,
                        'link':  absolute(baseUrl,$(div).find('a.wr-product-grid-card-more-details').attr("href")),
                        'image':  $(div).find('img').attr("src"),
                        'title':  $(div).find('.wr-product-grid-card-title').text().trim(),
                        'price':  $(div).find('.wr-product-grid-card-price').text().trim(),
                        'sold':  $(div).find('.wr-product-grid-card-gift-purchased-label').length
                    };
                }));
                pagination = document.querySelectorAll('.a-normal');
                arr.push(Array.prototype.map.call(pagination, function(li, i) {
                    return {
                        'id': i,
                        'link':  $(li).text().trim(),
                    };
                }));
                return arr;
            }, baseUrl);
            splitArray = url.split('/');
            casper.capture("./assets/scripts/img/"+splitArray[splitArray.length-1]+"_"+pageNumber+".png")
            this.echo(JSON.stringify(pageData, null, '    '));
        });

        }, function (){console.log("Time Out")});


}, function (){console.log("Time Out")});

var stopScript = function() {
    casper.echo("STOPPING SCRIPT").exit();
};


casper.run();


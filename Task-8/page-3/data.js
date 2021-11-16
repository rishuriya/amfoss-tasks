// Returns a json data for chart 
// The data tells about the sale of particular pizza on a random day
    var id=[];
    var pizza=[];
    var sold=[];
    cdata=getRandomJson()
    for(var i=0;i<cdata.length;i++)
    {
      
        id[i]=cdata[i]["_id"];
        
        pizza[i]=cdata[i]["pizza"];
        
        sold[i]=cdata[i]["sold"];
    }
    //window.alert(pizza);
    var barColors=["red","yellow","green","orange","blue"]
    new Chart("myChart", {
        //labels: "sales",
        type: "bar",
        data: {
          labels: pizza,
          datasets: [{
            backgroundColor: barColors,
            data: sold
          }]
        },
        options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Pizza Sale report"
            }
          }
      });
function getRandomJson() {
    var cdata = [{
        "_id": "585b544f5c86b6c8537c34d6",
        "pizza": "Pepperoni",
        "sold": Math.floor(Math.random() * (100 - 20 + 1)) + 20,
    }, {/* w w  w . d  em o  2s .c o m*/
        "_id": "585b54505c86b6c8537c34d7",
        "pizza": "Farmhouse",
        "sold": Math.floor(Math.random() * (80 - 1 + 1)) + 1,
    }, {
        "_id": "585b54515c86b6c8537c34d8",
        "pizza": "Veggie Paradise",
        "sold": Math.floor(Math.random() * (90 - 20 + 1)) + 20,
    }, {
        "_id": "585b54525c86b6c8537c34d9",
        "pizza": "Peppy Panner",
        "sold": Math.floor(Math.random() * (50 - 40 + 1)) + 40,
    }, {
        "_id": "585b54535c86b6c8537c34da",
        "pizza": "VEGGIE PARADISE",
        "sold": Math.floor(Math.random() * (85 - 20 + 1)) + 20,
    }];
    
    return cdata;
}
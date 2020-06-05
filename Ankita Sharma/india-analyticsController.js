cov19app.controller('india-analyticsCont',function($scope,getIndiaSummary)
                    {
                       getIndiaSummary.getAllIndiaSummary().then(function(data)
                                                       {
                                                          console.log(data.data);
                                                           $scope.dates=data.data.cases_time_series;
                                                          $scope.indiaCases=data.data.statewise[0];
                                                         
                                                        
        $scope.indiaChart = {
                labels: ["Confirmed", "Active", "Recovered","Deaths"],
                data: [],
                color: ["#FF4500", "#1E90FF", "#008000","#FF0000"]
            };
            $scope.indiaChart.data.push($scope.indiaCases.confirmed);
              $scope.indiaChart.data.push($scope.indiaCases.active);
              $scope.indiaChart.data.push($scope.indiaCases.recovered);
               $scope.indiaChart.data.push($scope.indiaCases.deaths);
            var ctx = document.getElementById("dvCanvas").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: $scope.indiaChart.data,
                        backgroundColor: $scope.indiaChart.color
                    }],
                    labels: $scope.indiaChart.labels
                },
                options: {
                    responsive: false,
                     legend:{
          display:true,
        labels:{
            fontColor:'#000000'
        }
    }
                }
            });
                           $scope.labels=[];
                           $scope.data=[[],[],[]];
                             $scope.dates.forEach(function(elem,index)
                                  {
                                       $scope.labels.push(elem.date);  
                                        $scope.data[0].push(elem.totalconfirmed);
                                         $scope.data[1].push(elem.totalrecovered);
                                         $scope.data[2].push(elem.totaldeceased);
                                  });
                                         
        
  $scope.series = ['confirmed', 'recovered','deaths'];
 $scope.colors=["#FF4500", "#008000","#FF0000"];
  $scope.onClick = function (points, evt) {
    console.log(points, evt);
  };
  $scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
  $scope.options = {
      legend:{
          display:true,
        labels:{
            fontColor:'#000000'
        }
    },
    scales: {
        yAxes: [
        {
          id: 'y-axis-1',
          type: 'linear',
          display: true,
          position: 'left'
        },
        {
          id: 'y-axis-2',
          type: 'linear',
          display: true,
          position: 'right'
        }
      ]
    }
    
  };
                       });
});
    

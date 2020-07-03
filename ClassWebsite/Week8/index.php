<!DOCTYPE html>

<html>
    <head>
        <title>Disney Votes</title>
        <style>
            body {
                  background-color: lightblue;
                  
                }
                .main  {
                  margin-left: 100px; 
                  margin-top: 150px; 
                  float: left; 
                  margin-right: 30px; 
                  border: 12px solid black; 
                  padding: 0px 10px 5px 0px; 
                  width: 300px;
                  width: 400px ;
                  height: 550px ;
                }
                
                .btn{
                  width: 200px;
                  float: left;
                  color: solid black;
                  background-color: lightgreen;
                  height: 65px;
                  margin: 10px 0px 10px 30px;  
                  margin-left: 90px;           
                  
                }

                .results{
                  float: left;
                  margin-left: 70px;
                  margin-right: 10px;
                  margin-top: 170px;
                  border: 9px solid black;
                  width: 650px;
                 
                  height: 500
                  
                }
                h2{
                  margin-left: 50px;
                }
                h1{
                  margin: center;
                  margin-top: 100px;
                  margin-left: 600px;
                  font-size: 70px;
                }
               
               
              


      
  
   </style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    </head>
    <body>

        <div>
        <h1>Vote for your favorite Disney Character</h1>
            
          <div class="main">
          <h3>Donald Duck</h3>
          <img src="images/donald.png"  >
          <input type="button"  class="btn" data-character-id="1"  value="Vote for Donald Duck">&nbsp;&nbsp;&nbsp;&nbsp;
          </div>

          <div class="main">
          <h3>Mickey</h3>
          <img src="images/mickey.png">
          <input type="button"  class="btn" data-character-id="2"  value="Vote for Mickey Mouse">&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          
           
          <div class="main">
          <h3>Goofy</h3>
          <img src="images/goofy.png ">
          <input type="button"  class="btn" data-character-id="3"  value="Vote for Goofy">
          </div>

          <div class="results" >
          <h3>Voting Results</h3>
          <canvas id="myChart"></canvas>
          </div>

            
        </div>
        
    </body>
</html>
<script>
    (function() {
    
     document.querySelectorAll('.btn').forEach(item => {
        item.addEventListener('click', voteInsert);
      })
      
      getVote ();

      
   
})();

    async function voteInsert() {
      const url = 'vote.php';
      const data = { "action": "insert", "DisneyCharacterID": this.dataset.characterId };
      try {
          const response = await fetch(url, {
                  method: 'POST', 
                  body: JSON.stringify(data), 
                  headers: {
                  'Content-Type': 'application/json'
              }
          });
          getVote();
      } catch(error) {
          console.log (error);
      }    
        
      
    }


    function displayChart(votes) {
        new Chart(document.getElementById("myChart"), {
            type: 'bar',
            data: {
                labels: votes[0],
                datasets: [
                {
                    label: "Number of Votes",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                    data: votes[1],
                    borderWidth: 10
                }
                ]
            },
            options: {
                legend: { display: false },
                title: {
                display: false,
                text: 'Number of Votes By Disney Character'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    }
    async function getVote () {
        const url ='vote.php';
        const data = { "action": "getVote" };
        try {
            const response = 
                await fetch(url, {
                    method: 'POST', 
                    body: JSON.stringify(data), 
                    headers: {
                    'Content-Type': 'application/json'
                }
          });
          const votes = await response.json();
          displayChart(votes);
        } catch(error) {
            console.log (error);
        }
    }

</script>

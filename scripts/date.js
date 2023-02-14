function formatDate(fullDate) { 
                               var x = new Date(fullDate);
                               day = x.getDate();      
                               month = x.getMonth() + 1;
                               year = x.getFullYear();
                               if (day < 10) {day = "0" + day};
                               if (month < 10) {month = "0" + month};
                               return day + "/" + month + "/" + year;       
                               }



  /**
   * Sample JavaScript code for calendar.events.list
   * See instructions for running APIs Explorer code samples locally:
   * https://developers.google.com/explorer-help/guides/code_samples#javascript
   */

    
   function loadClient() {
    gapi.client.setApiKey("AIzaSyCxPrMLxeNTv9NRvHzEgdnyK5H54BCNHVc");
    return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/calendar/v3/rest")
        .then(function() { 
            console.log("GAPI client loaded for API"); 
            execute();
        },
              function(err) { console.error("Error loading GAPI client for API", err); });
  }
  
        function appendPre(message) {
        var pre = document.getElementById('preEventsContent');
        var textContent = document.createTextNode(message + '\n');
        pre.append(textContent);
      }

  
  // Make sure the client is loaded before calling this method.
  function execute() {
      function ISODateString(d){
        function pad(n){return n<10 ? '0'+n : n}
        return d.getUTCFullYear()+'-'
              + pad(d.getUTCMonth()+1)+'-'
              + pad(d.getUTCDate())+'T'
              + pad(d.getUTCHours())+':'
              + pad(d.getUTCMinutes())+':'
              + pad(d.getUTCSeconds())+'Z'}

        var d = new Date();
        var timeMin = ISODateString(d);
        var test =  "<div id='object1'>test</div>" ;
    return gapi.client.calendar.events.list({
      "calendarId": "force-elektro.nl_oabs0bt2kldeufcacoae9hph48@group.calendar.google.com",
      "maxResults": 8,
      "orderBy": "startTime",
      "showDeleted": false,
      "singleEvents": true,
      "timeMin": timeMin,

    })
        .then(function(response) {
          var events = response.result.items;
          if (events.length > 0) {
            for (i = 0; i < events.length; i++) {
              var event = events[i];
              var whenStart = event.start.dateTime || event.start.date;
              var whenEnd = event.end.dateTime || event.end.date;
              var location = event.location;

                var table = document.getElementById("tableEventsContent");
                var row = table.insertRow(i);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                
                var start = event.start.date;
                
                if (event.start.date == undefined){
                    var startDT = event.start.dateTime;
                    var start = startDT.slice(0, 10);
                    var startTime  ;
                    
                }
                
                var Location = event.location;
                    var res = encodeURIComponent(Location);
                    var url = "https://www.google.com/maps/search/?api=1&query="+Location;
                    
                
                
                var year = start.slice(0,4);
                var month = start.slice(5,7) - 1;
                var day = start.slice(8,10);
                
                var datJS = new Date(year, month, day);
                var optionsMonth = { month: 'long'};
                var monthString = new Intl.DateTimeFormat('en-US', optionsMonth).format(datJS);
                
                var optionsDay = { weekday: 'long'};
                var dayString = new Intl.DateTimeFormat('en-US', optionsDay).format(datJS);

                row.className = "eventRow";

                cell1.innerHTML = dayString + "</br> " + monthString  + " " + day;
                cell1.className = "eventCell1";
                
                cell2.innerHTML = event.summary;
                cell2.className = "eventCell2";
                
                // Event time (start and end)
                if (event.start.dateTime) {
                    var startTime = new Date(event.start.dateTime).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    var endTime = new Date(event.end.dateTime).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    cell3.innerHTML = startTime + " - " + endTime;
                } else {
                    cell3.innerHTML = "All day";
                }
                cell3.className = "eventCell3";
 
                // Event location
                if (location) {
                    var encodedLocation = encodeURIComponent(location);
                    var mapUrl = "https://www.google.com/maps/search/?api=1&query=" + encodedLocation;
                    cell4.innerHTML = "<a href='" + mapUrl + "' target='_blank'><img src='../Images/arrow.svg' class='arrow'></a>";
                } else {
                    cell4.innerHTML = '';
                }
                cell4.className = "eventCell4";
                }
          } else {
            appendPre('No upcoming events found.');
          }
        });

  }
  gapi.load("client");
  
  
  function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
	document.getElementById("overlay").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("overlay").style.display = "none";
}
  
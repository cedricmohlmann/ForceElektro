/**
 * Sample JavaScript code for calendar.events.list
 * See instructions for running APIs Explorer code samples locally:
 * https://developers.google.com/explorer-help/guides/code_samples#javascript
 */

$.myjQuery = function () {
  $('#slideshow > div').height($(document).height() + 10);
  $('#slideshow > div:before').height($(document).height() + 10);
};

function loadClient() {
  gapi.client.setApiKey("AIzaSyCxPrMLxeNTv9NRvHzEgdnyK5H54BCNHVc");
  return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/calendar/v3/rest")
    .then(function () {
      console.log("GAPI client loaded for API");
      execute();
    },
      function (err) { console.error("Error loading GAPI client for API", err); });
}


// Make sure the client is loaded before calling this method.
function execute() {
  function ISODateString(d) {
    function pad(n) { return n < 10 ? '0' + n : n }
    return d.getUTCFullYear() + '-'
      + pad(d.getUTCMonth() + 1) + '-'
      + pad(d.getUTCDate()) + 'T'
      + pad(d.getUTCHours()) + ':'
      + pad(d.getUTCMinutes()) + ':'
      + pad(d.getUTCSeconds()) + 'Z'
  }

  var d = new Date();
  var timeMin = ISODateString(d);
  return gapi.client.calendar.events.list({
    "calendarId": "force-elektro.nl_oabs0bt2kldeufcacoae9hph48@group.calendar.google.com",
    "maxResults": 4,
    "orderBy": "startTime",
    "showDeleted": false,
    "singleEvents": true,
    "timeMin": timeMin
  })
    .then(function (response) {
      var events = response.result.items;
      if (events.length > 0) {
        for (i = 0; i < events.length; i++) {
          var event = events[i];
          var when = event.start.dateTime || event.start.date;  // DateTime for timed events, date for all-day events
          
          // Format start date and time
          var startDate = new Date(when);
          var dateString = startDate.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
          var timeString = event.start.dateTime ? startDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) : "All day";

          // Get the event location (if available)
          var location = event.location || "Location not provided";

          // Append the event details to the 'preMainEventsContent'
          var eventDetails = `${event.summary}\nDate: ${dateString}\nTime: ${timeString}\nLocation: ${location}\n\n`;
          appendPre(eventDetails);
        }
        $.myjQuery();
      } else {
        appendPre('No upcoming events found.');
        $.myjQuery();
      }
    });
}

// Utility function to append content to the 'preMainEventsContent' div
function appendPre(message) {
  var pre = document.getElementById('preMainEventsContent');
  var textContent = document.createTextNode(message + '\n');
  pre.appendChild(textContent);
}

gapi.load("client");

function openNav() {
  document.getElementById("mySidenav").style.width = "280px";
  document.getElementById("overlay").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("overlay").style.display = "none";
}


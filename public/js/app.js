new Vue({
   el: '#app',
   data: {
      room_name: null,
      start_hour: null,
      end_hour: null,
   },
   saveEvent() {
       axios.post('/day', {
           room_name: this.room_name,
           start_hour: this.start_hour,
           end_hour: this.end_hour
       })
           .then(function (response) {
               console.log(response);
           })
           .catch(function (error) {
               console.log(error);
           });
   }
});
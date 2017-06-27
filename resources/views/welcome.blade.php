<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Laravel</title>
</head>
<body>
<div id="app">


    <div class="col-md-3 col-md-offset-4">
        <button class="btn btn-success">Show this day empty rate</button>
        <form>
            <div class="form-group">
                <label>Room name</label>
                <input type="room_name" required class="form-control" placeholder="Enter room name, please">
            </div>
            <div class="form-group">
                <label>Start hour</label>
                <select name="start_hour" required class="form-control">
                    <option value="" selected="selected">Please select start hour</option>
                    <option v-for="hour, hour_index in 24" value=hour_index>@{{hour_index}}</option>
                </select>
            </div>
            <div class="form-group">
                <label>End hour</label>
                <select name="start_hour" required class="form-control" v-bind="">
                    <option value="" selected="selected">Please select end hour</option>
                    <option v-for="hour in 24" value=hour_index>@{{hour}}</option>
                </select>
            </div>

            <button @click="saveEvent" class="btn btn-default">Save Event</button>
        </form>
    </div>
</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://npmcdn.com/vue/dist/vue.js"></script>
<script src="/js/app.js"></script>
</body>
</html>

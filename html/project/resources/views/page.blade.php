<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>appointment record</title>
  </head>
  <body>
  <table>

      <tr>
        <td>id</td>
        <td>name</td>
        <td>Time of appointment</td>
      </tr>
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->appointmentTime}}</td>
        </tr>

    </table>
  </body>
</html>

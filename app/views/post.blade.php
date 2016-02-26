<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog Multilanguaje</title>
  </head>
  <body>

    <h1>{{ trans('localization_test.alltheblog') }}</h1>


<table class="table table-striped table-bordered">
  <thead>
      <tr>
          <td>{{ trans('localization_test.title') }}</td>
          <td>{{ trans('localization_test.content') }}</td>


      </tr>
  </thead>
  <tbody>

<?php
  $title = 'title_'.$lang;
  $content = 'content_'.$lang;
  ?>

   @foreach($blog as $key => $value)

      <tr>
          <td>{{ $value->$title }}</td>
          <td>{{ $value->$content }}</td>

      </tr>
  @endforeach




  </tbody>
</table>

  </body>
</html>

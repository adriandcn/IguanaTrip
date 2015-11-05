@extends('front.masterPageServicios')

@section('step1')
{!! HTML::style('css/table.css') !!} 
<div class="container">
    {!! Form::open(['url' => route('upload-postServicioOperador'),  'id'=>'tabla_servicios']) !!}
  <h1>HTML5 Editable Table</h1>
  <p>Through the powers of <strong>contenteditable</strong> and some simple jQuery you can easily create a custom editable table. No need for a robust JavaScript library anymore these days.</p>
  
  <ul>
    <li>An editable table that exports a hash array. Dynamically compiles rows from headers</li> 
    <li>Simple / powerful features such as add row, remove row, move row up/down.</li>
  </ul>
  
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Name</th>
        <th>Value</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td contenteditable="true">Stir Fry</td>
        <td contenteditable="true">stir-fry</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
      <!-- This is our clonable table line -->
      <tr class="hide">
        <td contenteditable="true">Untitled</td>
        <td contenteditable="true">undefined</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </table>
  </div>
  
  <button id="export-btn" class="btn btn-primary">Export Data</button>
  <p id="export"></p>
      {!! Form::close() !!}
</div>
@section('scripts')
{!! HTML::script('/js/tabla_dinamica.js') !!}

@stop

@stop
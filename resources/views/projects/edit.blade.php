@extends('projects.layout')
@section('content')
 
 
 	<h2>Edit Project</h2>
 
    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Update Project'])
    {!! Form::close() !!}
@endsection
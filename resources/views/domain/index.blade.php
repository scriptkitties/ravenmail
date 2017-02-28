@extends('main')

@section('content')
<h2>Domains</h2>
<section>
    <p>
        <a href="{{ route('domain.create') }}"><i class="fa fa-plus"></i> Add domain</a>
    </p>
</section>
<table>
    <thead>
        <tr>
            <th>Domain name</th>
            <th>Users</th>
            <th>Aliases</th>
            <th>Public domain</th>
        <tr>
    </thead>
    <tbody>
        @foreach($domains as $domain)
            <tr>
                <td>
                    <a href="{{ route('domain.show', ['name' => $domain->name]) }}">{{ $domain->name }}</a>
                </td>
                <td>
                    {{ $domain->users()->count() }}
                    <a class="button-xsmall" href="{{ route('domain.user.create', ['domain' => $domain->name]) }}">
                        <i class="fa fa-fw fa-plus"></i>
                    </a>
                </td>
                <td>
                    {{ $domain->aliases()->count() }}
                    <a class="button-xsmall" href="{{ route('domain.alias.create', ['domain' => $domain->name]) }}">
                        <i class="fa fa-fw fa-plus"></i>
                    </a>
                </td>
                <td>
                    @if($domain->public)
                        <i class="fa fa-fw fa-check-square-o"></i>
                    @else
                        <i class="fa fa-fw fa-square-o"></i>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection


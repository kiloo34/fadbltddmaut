<div class="sidebar-brand">
    @if (auth()->user()->role->name == 'admin')
    <a href="{{ route('admin.dashboard.index') }}">
    @elseif (auth()->user()->role->name == 'pakar')
    <a href="{{ route('pakar.dashboard.index') }}">
    @else
    <a href="#">
    @endif
        {{__("MAUT BLTDD Ekstrem")}}
    </a>
</div>
<div class="sidebar-brand sidebar-brand-sm">
    @if (auth()->user()->role->name == 'admin')
    <a href="{{ route('admin.dashboard.index') }}">
    @elseif (auth()->user()->role->name == 'pakar')
    <a href="{{ route('pakar.dashboard.index') }}">
    @else
    <a href="#">
    @endif
        {{__("SPBLT")}}
    </a>
</div>
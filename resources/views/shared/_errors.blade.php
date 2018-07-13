@if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


<!-- Blade 支持所有的循环语句和条件判断语句，如 @if, @elseif, @else, @for, @foreach, @while 等等，应用在 Blade 中的表达式都需要以 @ 开头。 -->
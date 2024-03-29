<?php
  $id = $field->getAlias();
  $name = $field->getAlias();
?>

<fieldset class="form-group radio-date {{ $errors->has($name) ? ' has-danger' : '' }}">
  <div class="grid-list {{ isset($gridListClass) ? $gridListClass : 'grid-list-2 grid-list-1-xs grid-list-1-sm' }}">
    @foreach ($field->getOptions() as $option)
      <article class="grid-list-item custom-radio-checkbox">
        <input
          id="{{ $id }}[{{ $option['key'] }}]"
          name="{{ $name }}"
          type="{{ $field->getType() }}"
          class="{{ $field->getClass() }}"
          value="{{ $option['key'] }}"
          {{ ($option['key'] === $field->getValue() || (old($name) && old($name) == $option['key'])) ? 'checked' : '' }}
          {{ ($field->isRequired() && $loop->index == 0) ? 'required' : '' }}>
        <label for="{{ $id }}[{{ $option['key'] }}]">{!! $option['value'] !!}</label>
      </article>
    @endforeach
  </div>
  @if ($errors->has($name))
    <span class="help-block">
      <strong>{{ $errors->first($name) }}</strong>
    </span>
  @endif
</fieldset>

<div>
  <select name="state" id="state" wire:model="state" wire:change="changeState" {!! $attributes['stateAttrs'] !!}>
    <option>--Select State And Division--</option>
    @foreach ($states as $key => $state)
    <option value="{{ $key }}">{{ $key . '/(' . $state . ')' }}</option>
    @endforeach
  </select>
  <select name="township" id="township" wire:model="township" {!! $attributes['townshipAttrs'] !!}>
    <option>--Select Township--</option>
    @foreach ($townships as $township)
    <option value="{{ $township }}">{{ $township }}</option>
    @endforeach
  </select>
  <select name="type" id="type" wire:model="type" {!! $attributes['typeAttrs'] !!}>
    <option value="">--Select NRC Type--</option>
    @foreach ($types as $type)
    <option value="{{ $type }}">{{ $type }}</option>
    @endforeach
  </select>
  <input type="text" name="register_no" wire:model="registerNo" wire:change.debounce.50ms="changeNumber"
    placeholder="123456" {!! $attributes['registerNoAttrs'] !!}>
</div>
<?php


use Livewire\Volt\Component;

new class extends Component
{
    //
    public $title;
    
};
?>

<div>
    {{-- Very little is needed to make a happy life. - Marcus Aurelius --}}
    <label for="">Poll title</label>
    <input type="text" wire:model.live="title"/>
    Current Title  {{$title}}
</div>
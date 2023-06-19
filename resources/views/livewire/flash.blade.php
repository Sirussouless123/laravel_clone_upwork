<div x-data="{ open:false}" @flash-message.window='open=true;setTimeout()=>open=false,7000'>
      <div class="border {{ $type ?$colors[$type] : ''}}px-1 py-2  rounded" x-show="open" x-cloak>
         {{ $message }}
      </div>
</div>

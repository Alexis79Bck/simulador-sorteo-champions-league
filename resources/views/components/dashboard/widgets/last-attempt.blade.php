@props(['title', 'dateLastAttempt'])

<article class="rounded-xl border-t-8 border-sky-600 bg-neutral-50">
    <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
      <div>
        <span class="font-medium text-2xl  text-sky-800">{{ __($title) }}:</span>
      </div>
  
      <div>
        <span class="font-medium text-2xl text-sky-800">
          {{ $dateLastAttempt }}
        </span>
  

    </div>
  
    
  </article>
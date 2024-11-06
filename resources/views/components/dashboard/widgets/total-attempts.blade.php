@props(['title', 'totalAttempts'])

<article class="rounded-xl border-t-8 border-amber-600 bg-neutral-50">
    <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
      <div>
        <span class="font-medium text-2xl  text-amber-800">{{ __($title) }}:</span>
      </div>
  
      <div>
        <span class="font-medium text-2xl text-amber-800">
          {{ $totalAttempts }}
        </span>
  

    </div>
  
    
  </article>
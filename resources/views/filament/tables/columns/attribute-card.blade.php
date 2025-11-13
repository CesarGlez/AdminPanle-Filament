<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 
   p-4 hover:shadow-md transition flex flex-col justify-between h-32">

   {{-- Encabezado: nombre e iconos en una sola fila --}}
   <div class="flex flex-row items-center justify-between">
      <span class="text-base font-semibold text-gray-800 dark:text-gray-100 truncate max-w-[70%]">
         {{ $getRecord()->key }}
      </span>

      <div class="flex flex-row items-center gap-2 shrink-0">
         <a href="{{ static::getResource()::getUrl('edit', ['record' => $getRecord()]) }}"
            class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 transition"
            title="Editar">
            <x-filament::icon icon="heroicon-o-pencil-square" class="w-5 h-5" />
         </a>

         <button
            wire:click="delete('{{ $getRecord()->getKey() }}')"
            onclick="confirm('¿Seguro que deseas eliminar este atributo?') || event.stopImmediatePropagation()"
            class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 transition"
            title="Eliminar">
            <x-filament::icon icon="heroicon-o-trash" class="w-5 h-5" />
         </button>
      </div>
   </div>

   {{-- Sección inferior opcional --}}
   <div class="mt-3 text-sm text-gray-500 dark:text-gray-400">
      {{-- Aquí podrías poner una descripción, tipo o conteo de valores relacionados --}}
      {{ $getRecord()->description ?? '' }}
   </div>
</div>

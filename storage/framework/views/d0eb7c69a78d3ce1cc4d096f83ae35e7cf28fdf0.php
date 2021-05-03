<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <?php if(session()->has('message')): ?>
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm"><?php echo e(session('message')); ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <button wire:click="create()"
                class="bg-blue-600 text-white font-bold py-2 px-4 rounded my-3">Tambah Siswa</button>
            <?php if($isModalOpen): ?>
            <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Kelas</th>
                        <th class="px-4 py-2">Alamat</th>
                        <th class="px-4 py-2">Tempat & Tanggal Lahir</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo e($item->id); ?></td>
                        <td class="border px-4 py-2"><?php echo e($item->nama); ?></td>
                        <td class="border px-4 py-2"><?php echo e($item->kelas); ?></td>
                        <td class="border px-4 py-2"><?php echo e($item->alamat); ?></td>
                        <td class="border px-4 py-2"><?php echo e($item->tmplhr); ?>, <?php echo e(date('d F Y', strtotime($item->tgllhr))); ?></td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit(<?php echo e($item->id); ?>)"
                                class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete(<?php echo e($item->id); ?>)"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views/livewire/siswa.blade.php ENDPATH**/ ?>
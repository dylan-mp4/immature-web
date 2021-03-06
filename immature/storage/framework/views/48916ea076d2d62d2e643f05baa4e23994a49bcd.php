

<?php $__env->startSection('content'); ?>
<?php if(session()->has('message')): ?>
<div class="w-4/5 m-auto">
<div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
    <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div>
        <span class="font-medium">Success!</span> <?php echo e(session()->get('message')); ?>

    </div>
</div>
</div>
<?php endif; ?>
</div>
<div class="overflow-x-hidden bg-gray-100">
    <div class="px-6 py-8">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Development Blog</h1>
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <a href="blog/create" class="px-3 py-2 mx-1 font-medium text-black bg-white rounded-md">
                        Create new post
                    </a>
                    <?php endif; ?>
                    
                </div>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-6">
                 <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <img class="object-cover w-full h-64" src="<?php echo e(asset('images/' . $post->image_path)); ?>" alt="Development Blog Image">

        <div class="p-6">
            <div>
                <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Category//Not Implemented</span>
                <a href="/blog/<?php echo e($post->slug); ?>" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline"><?php echo e($post->title); ?></a>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"><?php echo e($post->description); ?></p>
            </div>

            <div class="mt-4">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <img class="object-cover h-10 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Face-smile.svg/2048px-Face-smile.svg.png" alt="Avatar">
                        <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200"><?php echo e($post->user->name); ?></a>
                    </div>
                    <span class="mx-1 text-xs text-gray-600 dark:text-gray-300"><?php echo e(date('jS M Y', strtotime($post->created_at))); ?></span>

                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <div class="flex items-center px-5">
                    <button onclick="window.location.href='/blog/<?php echo e($post->slug); ?>/edit'" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                        Edit
                    </button>
                    <form action="/blog/<?php echo e($post->slug); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                    <button onclick="return confirm('Are you sure?')" type="submit" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                        Delete
                    </button>
                </form>
            </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-8">
                    <div class="flex-auto">
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </div>
            <div class="hidden w-4/12 -mx-8 lg:block">
                <div class="px-8">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Developers</h1>
                    <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
                        <ul class="-mx-4">
                            <?php $__currentLoopData = $developers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $developer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-center"><img
                                    src="<?php echo e($developer->image_path); ?>"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline"><?php echo e($developer->name); ?></a><span
                                        class="text-sm font-light text-gray-700"></span></p>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\University\Aston - CompSci\YEAR 2\TP\Submission 3\Website\GitHub\immature-web\immature\resources\views/blog/index.blade.php ENDPATH**/ ?>
## Simple Task Scheduler project

- Add two file one SchedulerTask.php
    This is a class file in app\Console\Commands\
- Modify Kernel.php 
    create a protected $command array

        protected $command = [
            Commands\ScheduleTask::class,
        ];

    uncomment below code under scheduler function

        $schedule->command('schedule-task')->everyFiveSeconds();

## purpose of project

- continuously sending emails to all the users on daily basis.

## Additional modification

- home.blade.php
- ScheduleController.php

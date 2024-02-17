@servers(['web' => ['u1424128@qacjakarta.id -p 65002']])
 
@task('optimize', ['on' => 'web'])
    cd /home/u1424128/quranjournal
    php artisan optimize
@endtask

@task('deploy', ['on' => 'web'])
    cd /home/u1424128/quranjournal
    git pull origin main
    php artisan optimize
@endtask

@task('deploy-full', ['on' => 'web'])
    cd /home/u1424128/quranjournal
    git pull origin main
    composer install
    php artisan migrate:fresh --seed --force
    php artisan optimize
@endtask
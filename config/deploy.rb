set :application, "stevenxu.ca"
set :repository,  "git@github.com:cairo140/stevenxu.ca.git"

set :scm, :git

role :web, "stevenxu.ca"
role :app, "stevenxu.ca"
role :db,  "stevenxu.ca", :primary => true

set :user, 'steven'
set :use_sudo, false
set :deploy_to, "/home/#{user}/www/#{application}"
set :deploy_via, :remote_cache
set :deploy_port, 5555

set :rvm_type, :user
set :rvm_ruby_string, '1.9.2'

after 'deploy:update_code', 'deploy:make_production_symlinks'
after 'deploy', 'deploy:cleanup'

namespace :deploy do
  task :make_production_symlinks do
    run "ln -s #{deploy_to}/shared/config/database.yml #{release_path}/config/database.yml"
  end
  task :restart, :roles => :app, :except => { :no_release => true } do
    run "cd #{current_path} && bundle exec thin stop"
    run "cd #{current_path} && bundle exec thin start -p #{deploy_port} -a 127.0.0.1 -e production -d"
  end
end

Stevenxu::Application.routes.draw do
  resources :pages

  devise_for :users

  match 'calendar' => redirect('http://www.google.com/calendar/embed?src=steven%40stevenxu.ca')

  root :to => 'pages#index'
end

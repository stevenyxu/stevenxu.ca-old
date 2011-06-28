Stevenxu::Application.routes.draw do
  resources :pages

  devise_for :users

  root :to => 'pages#index'
end

module UsersHelper
  def admin?
    user_signed_in? && current_user.admin?
  end
end

module ApplicationHelper
  def m text
    Redcarpet.new(text, :filter_html).to_html
  end
end

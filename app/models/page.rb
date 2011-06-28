class Page < ActiveRecord::Base
  validates_uniqueness_of :permalink
  validates_format_of :permalink, :with => /\A[a-z0-9_-]+\Z/i

  has_friendly_id :permalink
end

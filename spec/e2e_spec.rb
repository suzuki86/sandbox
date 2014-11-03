require 'watir-webdriver'

describe "yahoo.co.jp" do
  before do
    @browser = Watir::Browser.new :ff
  end
  it "has valid title" do
    @browser.goto "http://yahoo.co.jp/"
    expect(@browser.title).to eq("hoge")
  end
  after do
    @browser.close
  end
end



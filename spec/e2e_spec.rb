# encoding: utf-8

require 'watir-webdriver'
require 'headless'

describe "yahoo.co.jp" do
  before do
    @headless = Headless.new
    @headless.start
    @browser = Watir::Browser.new :ff
  end
  it "has valid title" do
    @browser.goto "http://qiita.com"
    expect(@browser.title).to eq("Qiita - A technical knowledge sharing platform for programmers.")
  end
  after do
    @browser.quit
    @headless.destroy
  end
end



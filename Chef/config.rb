# See https://docs.chef.io/workstation/config_rb/ for more information on knife configuration options

current_dir = File.dirname(__FILE__)
log_level                :info
log_location             STDOUT
node_name                "klima"
client_key               "#{current_dir}/klima.pem"
chef_server_url          "https://chef/organizations/short_name"
cookbook_path            ["#{current_dir}/../cookbooks"]

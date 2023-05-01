# See https://docs.chef.io/workstation/config_rb/ for more information on knife configuration options

current_dir = File.dirname(__FILE__)
log_level                :info
log_location             STDOUT
validation_client_name    "klima"
validation_key            "~/.chef/short_name-validator.pem"
chef_server_url          "https://chef.example.com/organizations/short_name"
cookbook_path            ["#{current_dir}/../cookbooks"]

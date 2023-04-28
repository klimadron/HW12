Vagrant.configure("2") do |config|
  config.vm.define :nginx do |nginx|
    nginx.vm.box = "ubuntu/jammy64"
    nginx.vm.network "public_network", bridge: "eno1" , ip: "192.168.13.230"
    nginx.vm.network "private_network", ip: "192.168.102.10", name: "vboxnet1" , adapter: 3
    #nginx.vm.network "private_network", :type => 'dhcp', :adapter => 3
    #nginx.vm.network "private_network", ip: "192.168.102.10" , virtualbox__intnet: "true"
    #use_dhcp_assigned_default_route: true
    nginx.vm.hostname = "nginx"
    nginx.vm.provider :virtualbox do |nginx|
      nginx.name = "nginx"
      nginx.check_guest_additions = false
      nginx.memory = 2048
      nginx.cpus = 2
    end
  end
  config.vm.define :apache do |apache|
    apache.vm.box = "ubuntu/jammy64"
    # apache.vm.network "private_network", :type => 'dhcp', :adapter => 2
    # apache.vm.network "private_network", :type => 'dhcp', :adapter => 3
    apache.vm.network "private_network", ip: "192.168.102.11", name: "vboxnet1" , :adapter => 2
    apache.vm.network "private_network", ip: "192.168.100.2" , name: "vboxnet2", :adapter => 3
    #use_dhcp_assigned_default_route: true
    apache.vm.hostname = "apache"
    apache.vm.provider :virtualbox do |apache|
      apache.name = "apache"
      apache.check_guest_additions = false
      apache.memory = 2048
      apache.cpus = 2
    end
  end
  config.vm.define :sql do |sql|
    sql.vm.box = "ubuntu/jammy64"
    # sql.vm.network "private_network", :type => 'dhcp', :adapter => 2
    # sql.vm.network "private_network", :type => 'dhcp', :adapter => 3
    sql.vm.network "private_network", ip: "192.168.101.2", name: "vboxnet3", :adapter => 2
    sql.vm.network "private_network", ip: "192.168.100.3", name: "vboxnet2", :adapter => 3
    #use_dhcp_assigned_default_route: true
    sql.vm.hostname = "sql"
    sql.vm.provider :virtualbox do |sql|
      sql.name = "sql"
      sql.check_guest_additions = false
      sql.memory = 2048
      sql.cpus = 2
    end
  end

  # Create shared folder
  config.vm.synced_folder ".", "/vagrant", disabled: true
  #config.vm.synced_folder "/home/klima/vagrant/", "/vagrant", :mount_options => ['dmode=774', 'fmode=775']
end

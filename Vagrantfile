Vagrant.configure("2") do |config|
  config.vm.define :nginx do |nginx|
    nginx.vm.box = "ubuntu/jammy64"
    nginx.vm.network "public_network", bridge: "eno1" , ip: "192.168.13.230"
    nginx.vm.network "private_network", ip: "192.168.102.10"
    nginx.vm.hostname = "nginx"
    nginx.vm.provider :virtualbox do |nginx|
      nginx.name = "nginx"
      nginx.check_guest_additions = false
      nginx.memory = 2048
      nginx.cpus = 2
      nginx.customize ["modifyvm", :id, "--nic3", "natnetwork"]
      nginx.customize ["modifyvm", :id, "--nat-network3", "102"]
    end
  end
  config.vm.define :apache do |apache|
    apache.vm.box = "ubuntu/jammy64"
    apache.vm.network "private_network", ip: "192.168.102.11"
    apache.vm.network "private_network", ip: "192.168.100.2"
    #use_dhcp_assigned_default_route: true
    apache.vm.hostname = "apache"
    apache.vm.provider :virtualbox do |apache|
      apache.name = "apache"
      apache.gui = true
      apache.check_guest_additions = false
      apache.memory = 4096
      apache.cpus = 3
      apache.customize ["modifyvm", :id, "--nic2", "natnetwork"]
      apache.customize ["modifyvm", :id, "--nat-network2", "102"]
      apache.customize ["modifyvm", :id, "--nic3", "natnetwork"]
      apache.customize ["modifyvm", :id, "--nat-network3", "100"]

    end
  end
  config.vm.define :sql do |sql|
    sql.vm.box = "ubuntu/jammy64"
    sql.vm.network "private_network", ip: "192.168.101.2"
    sql.vm.network "private_network", ip: "192.168.100.3"
    sql.vm.hostname = "sql"
    sql.vm.provider :virtualbox do |sql|
      sql.name = "sql"
      sql.check_guest_additions = false
      sql.memory = 2048
      sql.cpus = 2
      sql.customize ["modifyvm", :id, "--nic2", "natnetwork"]
      sql.customize ["modifyvm", :id, "--nat-network2", "101"]
      sql.customize ["modifyvm", :id, "--nic3", "natnetwork"]
      sql.customize ["modifyvm", :id, "--nat-network3", "100"]
    end
  end
  config.vm.provision "shell" do |s|
    ssh_pub_key = File.readlines("/home/klima/Документы/HW16/HW16/id_rsa.pub").first.strip
    s.inline = <<-SHELL
      echo #{ssh_pub_key} >> /home/vagrant/.ssh/authorized_keys
      echo #{ssh_pub_key} >> /root/.ssh/authorized_keys
    SHELL

  end
  config.vm.synced_folder ".", "/vagrant", disabled: true
end

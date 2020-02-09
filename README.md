<h1 align="center">
Cloud Computing Benchmark ¬Okeanos GRNET
</h1>

## Description
Okeanos is a greek IaaS(Infrastructure as a Service) platform where users from academic and research community can use it to create their own virtual machines on the cloud.

In this research will be measured the perfomance of the [¬Okeanos IaaS](https://okeanos.grnet.gr/) by using virtual machines with different composition.

## Results and research paper
You can find also the results of the measurement and the research on the bellow link

[Okeanos Cloud Benchmark - Google Drive Marios Patsis](https://drive.google.com/drive/folders/1bhjP_YFNjXE4kefvqdKXERFUpeh3IvWb)

## Benchmark tools
The tools used for the benchmark

- [Gzip](https://www.gzip.org/) 
- [ApacheBench](https://httpd.apache.org/docs/2.4/programs/ab.html) 
- [PhpBench](https://phpbench.com/)

## Setup VMs
From the [Okeanos Cyclades Dashboard](https://cyclades.okeanos.grnet.gr/ui/) (Academic account needed) go to create new machine and follow the steps to create your own virtual machine.

![Capture](https://user-images.githubusercontent.com/3619970/74103040-99069100-4b51-11ea-979f-42632050593c.PNG)

![Capture1](https://user-images.githubusercontent.com/3619970/74103041-9a37be00-4b51-11ea-88b1-0849e81aede5.PNG)

![Capture2](https://user-images.githubusercontent.com/3619970/74103042-9ad05480-4b51-11ea-8f19-3d49ae8fcc10.PNG)

![Capture3](https://user-images.githubusercontent.com/3619970/74103044-9c018180-4b51-11ea-988e-6b1270438ecb.PNG)

![Capture4](https://user-images.githubusercontent.com/3619970/74103046-9c9a1800-4b51-11ea-9cf3-1998b498e32e.PNG)


## Install Benchmark tools on VM
```sh
$ sudo apt-get -y install apache2
$ sudo apt-get -y install libapache2-mod-php7.0 php7.0
$ sudo apt install composer
$ global require phpbench/phpbench @dev
```

License
----
MIT



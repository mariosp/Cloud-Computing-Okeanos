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

 <img src="https://drive.google.com/uc?id=1SoNhaRuWx7muZ8u1dQAR_R-5Rf7Px9m8" />

 <img src="https://drive.google.com/uc?id=1xMDyvJVSXOHps4yrbLY9NKTxK-0sI2Aq" />

 <img src="https://drive.google.com/uc?id=109RGB7o5PDEsE8ofIRzEj2dxolqY42pI" />

 <img src="https://drive.google.com/uc?id=1uJVmz-oB5XE-v57PMBtKLbbFaBZM7x9D" />

 <img src="https://drive.google.com/uc?id=1pCJR6iwMvxOxDr1oCmo6zR4Kn1STXTDY" />


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



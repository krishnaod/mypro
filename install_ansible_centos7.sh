#!/bin/bash

yum install -y epel-release
yum repolist
yum install -y ansible
ansible --version

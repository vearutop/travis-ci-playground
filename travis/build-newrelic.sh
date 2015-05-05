#!/bin/bash

mkdir newrelic
cd newrelic
wget https://download.newrelic.com/agent_sdk/nr_agent_sdk-v0.16.1.0-beta.x86_64.tar.gz
tar -xzf nr_agent_sdk-*.tar.gz
cp nr_agent_sdk-*/include/* /usr/local/include/
cp nr_agent_sdk-*/lib/* /usr/local/lib/

git clone git@github.com:chregu/hhvm-newrelic-ext.git
cd hhvm-newrelic-ext

hphpize
cmake .
make
make install


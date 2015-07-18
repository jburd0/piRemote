#!/bin/bash
gpio_pins='4 17 27 22 18 23 24 25'
for pin in $gpio_pins; do
	echo $pin > /sys/class/gpio/export
	sleep 0.1
	echo out > /sys/class/gpio/gpio$pin/direction
done
gpio_pins='25 24 23 18 22 27 17 4'
for pin in $gpio_pins; do
	echo 1 > /sys/class/gpio/gpio$pin/value
	sleep 0.1
	echo $pin;
done

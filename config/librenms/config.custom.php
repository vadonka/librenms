<?php

### Default community
$config['snmp']['community'] = array("public", "Public");

### List of RFC1918 networks to allow scanning-based discovery
#$config['nets'][] = "192.168.1.0/24";

### Network MAP
$config['network_map_vis_options'] = '{
  "physics": {
    "forceAtlas2Based": {
      "springLength": 495
    },
    "maxVelocity": 38,
    "minVelocity": 0.75,
    "solver": "forceAtlas2Based"
  },
  "configure": { "enabled": false },
}';

### Oxidized configuration
$config['oxidized']['enabled']                  = true;
$config['oxidized']['url']                      = 'http://oxidized:8888';
$config['oxidized']['features']['versioning']   = true;
$config['oxidized']['group_support']            = true;
$config['oxidized']['default_group']            = 'default';
$config['oxidized']['reload_nodes']             = true;# Oxidized configuration
$config['oxidized']['enabled']                  = true;
$config['oxidized']['ignore_os'] = array('linux','windows');
$config['oxidized']['ignore_types'] = array('server','power');

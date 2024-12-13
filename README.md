# Toolkit

Main network : toolkit_default

## Kibana

[https://www.elastic.co/guide/en/kibana/current/docker.html](https://www.elastic.co/guide/en/kibana/current/docker.html)

Retrieve token from elasticsearch :

`docker-compose exec elasticsearch bash`

Run the following command :

`bin/elasticsearch-create-enrollment-token --scope kibana`

Retrieve verification code :

`docker-compose logs kibana`

Sample result :

```
Kibana has not been configured.

Go to http://0.0.0.0:5601/?code=541648 to get started.




Your verification code is:  541 648
```

## Elasticsearch

Generate password :

`docker-compose exec elasticsearch bash`

Run the following command :

`bin/elasticsearch-reset-password -u elastic`

Use elastic/generatedPassword in order to log into kibana

## Logstash

[https://www.elastic.co/guide/en/logstash/current/docker-config.html](https://www.elastic.co/guide/en/logstash/current/docker-config.html)

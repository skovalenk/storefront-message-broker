#!/bin/sh sh
echo "Install message broker..."
bin/magento catalog:message-broker:install --amqp-host=rabbit --amqp-port=5672 --amqp-user=guest --amqp-password=guest
bin/magento topology:install
#bin/magento queue:consumers:start catalog.product.export.consumer
#bin/magento queue:consumers:start catalog.category.export.consumer &
tail -f /dev/null

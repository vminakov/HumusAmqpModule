<?php
// Generated by ZF2's ./bin/classmap_generator.php
return array(
  'HumusAmqpModule\Module'                                                    => __DIR__ . '/src/HumusAmqpModule/Module.php',
  'HumusAmqpModule\Exception\ExceptionInterface'                              => __DIR__ . '/src/HumusAmqpModule/Exception/ExceptionInterface.php',
  'HumusAmqpModule\Exception\InvalidArgumentException'                        => __DIR__ . '/src/HumusAmqpModule/Exception/InvalidArgumentException.php',
  'HumusAmqpModule\Exception\RuntimeException'                                => __DIR__ . '/src/HumusAmqpModule/Exception/RuntimeException.php',
  'HumusAmqpModule\Exception\BadFunctionCallException'                        => __DIR__ . '/src/HumusAmqpModule/Exception/BadFunctionCallException.php',
  'HumusAmqpModule\Amqp\AbstractConsumer'                                     => __DIR__ . '/src/HumusAmqpModule/Amqp/AbstractConsumer.php',
  'HumusAmqpModule\Amqp\MultipleConsumer'                                     => __DIR__ . '/src/HumusAmqpModule/Amqp/MultipleConsumer.php',
  'HumusAmqpModule\Amqp\AbstractAmqp'                                         => __DIR__ . '/src/HumusAmqpModule/Amqp/AbstractAmqp.php',
  'HumusAmqpModule\Amqp\AnonConsumer'                                         => __DIR__ . '/src/HumusAmqpModule/Amqp/AnonConsumer.php',
  'HumusAmqpModule\Amqp\ExchangeOptions'                                      => __DIR__ . '/src/HumusAmqpModule/Amqp/ExchangeOptions.php',
  'HumusAmqpModule\Amqp\Exception\ExceptionInterface'                         => __DIR__ . '/src/HumusAmqpModule/Amqp/Exception/ExceptionInterface.php',
  'HumusAmqpModule\Amqp\Exception\InvalidArgumentException'                   => __DIR__ . '/src/HumusAmqpModule/Amqp/Exception/InvalidArgumentException.php',
  'HumusAmqpModule\Amqp\Exception\RuntimeException'                           => __DIR__ . '/src/HumusAmqpModule/Amqp/Exception/RuntimeException.php',
  'HumusAmqpModule\Amqp\Exception\BadFunctionCallException'                   => __DIR__ . '/src/HumusAmqpModule/Amqp/Exception/BadFunctionCallException.php',
  'HumusAmqpModule\Amqp\Exception\QueueNotFoundException'                     => __DIR__ . '/src/HumusAmqpModule/Amqp/Exception/QueueNotFoundException.php',
  'HumusAmqpModule\Amqp\PartsHolder'                                          => __DIR__ . '/src/HumusAmqpModule/Amqp/PartsHolder.php',
  'HumusAmqpModule\Amqp\MultipleConsumerInterface'                            => __DIR__ . '/src/HumusAmqpModule/Amqp/MultipleConsumerInterface.php',
  'HumusAmqpModule\Amqp\QosOptions'                                           => __DIR__ . '/src/HumusAmqpModule/Amqp/QosOptions.php',
  'HumusAmqpModule\Amqp\QueueOptions'                                         => __DIR__ . '/src/HumusAmqpModule/Amqp/QueueOptions.php',
  'HumusAmqpModule\Amqp\RpcServer'                                            => __DIR__ . '/src/HumusAmqpModule/Amqp/RpcServer.php',
  'HumusAmqpModule\Amqp\RpcClient'                                            => __DIR__ . '/src/HumusAmqpModule/Amqp/RpcClient.php',
  'HumusAmqpModule\Amqp\ConsumerInterface'                                    => __DIR__ . '/src/HumusAmqpModule/Amqp/ConsumerInterface.php',
  'HumusAmqpModule\Amqp\Consumer'                                             => __DIR__ . '/src/HumusAmqpModule/Amqp/Consumer.php',
  'HumusAmqpModule\Amqp\AmqpLoggedChannel'                                    => __DIR__ . '/src/HumusAmqpModule/Amqp/AmqpLoggedChannel.php',
  'HumusAmqpModule\Amqp\Fallback'                                             => __DIR__ . '/src/HumusAmqpModule/Amqp/Fallback.php',
  'HumusAmqpModule\Amqp\Producer'                                             => __DIR__ . '/src/HumusAmqpModule/Amqp/Producer.php',
  'HumusAmqpModule\Controller\ExchangesController'                            => __DIR__ . '/src/HumusAmqpModule/Controller/ExchangesController.php',
  'HumusAmqpModule\Controller\PurgeConsumerController'                        => __DIR__ . '/src/HumusAmqpModule/Controller/PurgeConsumerController.php',
  'HumusAmqpModule\Controller\ConsumerManagerAwareInterface'                  => __DIR__ . '/src/HumusAmqpModule/Controller/ConsumerManagerAwareInterface.php',
  'HumusAmqpModule\Controller\StdInProducerController'                        => __DIR__ . '/src/HumusAmqpModule/Controller/StdInProducerController.php',
  'HumusAmqpModule\Controller\ListController'                                 => __DIR__ . '/src/HumusAmqpModule/Controller/ListController.php',
  'HumusAmqpModule\Controller\RpcServerController'                            => __DIR__ . '/src/HumusAmqpModule/Controller/RpcServerController.php',
  'HumusAmqpModule\Controller\SetupFabricController'                          => __DIR__ . '/src/HumusAmqpModule/Controller/SetupFabricController.php',
  'HumusAmqpModule\Controller\ConsumerController'                             => __DIR__ . '/src/HumusAmqpModule/Controller/ConsumerController.php',
  'HumusAmqpModule\Service\AbstractAmqpCallbackAwareAbstractServiceFactory'   => __DIR__ . '/src/HumusAmqpModule/Service/AbstractAmqpCallbackAwareAbstractServiceFactory.php',
  'HumusAmqpModule\Service\ConnectionAbstractServiceFactory'                  => __DIR__ . '/src/HumusAmqpModule/Service/ConnectionAbstractServiceFactory.php',
  'HumusAmqpModule\Service\RpcClientAbstractServiceFactory'                   => __DIR__ . '/src/HumusAmqpModule/Service/RpcClientAbstractServiceFactory.php',
  'HumusAmqpModule\Service\AbstractAmqpAbstractServiceFactory'                => __DIR__ . '/src/HumusAmqpModule/Service/AbstractAmqpAbstractServiceFactory.php',
  'HumusAmqpModule\Service\Controller\MultipleConsumerFactory'                => __DIR__ . '/src/HumusAmqpModule/Service/Controller/MultipleConsumerFactory.php',
  'HumusAmqpModule\Service\Controller\ConsumerFactory'                        => __DIR__ . '/src/HumusAmqpModule/Service/Controller/ConsumerFactory.php',
  'HumusAmqpModule\Service\Controller\AnonConsumerFactory'                    => __DIR__ . '/src/HumusAmqpModule/Service/Controller/AnonConsumerFactory.php',
  'HumusAmqpModule\Service\Controller\PurgeConsumerFactory'                   => __DIR__ . '/src/HumusAmqpModule/Service/Controller/PurgeConsumerFactory.php',
  'HumusAmqpModule\Service\Controller\SetupFabricFactory'                     => __DIR__ . '/src/HumusAmqpModule/Service/Controller/SetupFabricFactory.php',
  'HumusAmqpModule\Service\Controller\AbstractConsumerFactory'                => __DIR__ . '/src/HumusAmqpModule/Service/Controller/AbstractConsumerFactory.php',
  'HumusAmqpModule\Service\Controller\PurgeAnonConsumerFactory'               => __DIR__ . '/src/HumusAmqpModule/Service/Controller/PurgeAnonConsumerFactory.php',
  'HumusAmqpModule\Service\Controller\PurgeMultipleConsumerFactory'           => __DIR__ . '/src/HumusAmqpModule/Service/Controller/PurgeMultipleConsumerFactory.php',
  'HumusAmqpModule\Service\Controller\StdInProducerFactory'                   => __DIR__ . '/src/HumusAmqpModule/Service/Controller/StdInProducerFactory.php',
  'HumusAmqpModule\Service\RpcServerAbstractServiceFactory'                   => __DIR__ . '/src/HumusAmqpModule/Service/RpcServerAbstractServiceFactory.php',
  'HumusAmqpModule\Service\ProducerAbstractServiceFactory'                    => __DIR__ . '/src/HumusAmqpModule/Service/ProducerAbstractServiceFactory.php',
  'HumusAmqpModule\Service\AbstractAmqpConnectionAwareAbstractServiceFactory' => __DIR__ . '/src/HumusAmqpModule/Service/AbstractAmqpConnectionAwareAbstractServiceFactory.php',
  'HumusAmqpModule\Service\MultipleConsumerAbstractServiceFactory'            => __DIR__ . '/src/HumusAmqpModule/Service/MultipleConsumerAbstractServiceFactory.php',
  'HumusAmqpModule\Service\PartsHolderFactory'                                => __DIR__ . '/src/HumusAmqpModule/Service/PartsHolderFactory.php',
  'HumusAmqpModule\Service\AnonConsumerAbstractServiceFactory'                => __DIR__ . '/src/HumusAmqpModule/Service/AnonConsumerAbstractServiceFactory.php',
  'HumusAmqpModule\Service\ConsumerAbstractServiceFactory'                    => __DIR__ . '/src/HumusAmqpModule/Service/ConsumerAbstractServiceFactory.php',
  'HumusAmqpModule\PluginManager\MultipleConsumer'                            => __DIR__ . '/src/HumusAmqpModule/PluginManager/MultipleConsumer.php',
  'HumusAmqpModule\PluginManager\AnonConsumer'                                => __DIR__ . '/src/HumusAmqpModule/PluginManager/AnonConsumer.php',
  'HumusAmqpModule\PluginManager\Callback'                                    => __DIR__ . '/src/HumusAmqpModule/PluginManager/Callback.php',
  'HumusAmqpModule\PluginManager\RpcServer'                                   => __DIR__ . '/src/HumusAmqpModule/PluginManager/RpcServer.php',
  'HumusAmqpModule\PluginManager\RpcClient'                                   => __DIR__ . '/src/HumusAmqpModule/PluginManager/RpcClient.php',
  'HumusAmqpModule\PluginManager\Connection'                                  => __DIR__ . '/src/HumusAmqpModule/PluginManager/Connection.php',
  'HumusAmqpModule\PluginManager\Consumer'                                    => __DIR__ . '/src/HumusAmqpModule/PluginManager/Consumer.php',
  'HumusAmqpModule\PluginManager\Producer'                                    => __DIR__ . '/src/HumusAmqpModule/PluginManager/Producer.php',
);

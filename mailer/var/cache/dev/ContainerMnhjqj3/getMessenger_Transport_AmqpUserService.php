<?php

namespace ContainerMnhjqj3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_AmqpUserService extends Mailer_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport.amqp_user' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Receiver/ReceiverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SenderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportInterface.php';

        return $container->privates['messenger.transport.amqp_user'] = ($container->privates['messenger.transport_factory'] ?? $container->load('getMessenger_TransportFactoryService'))->createTransport($container->getEnv('string:MESSENGER_TRANSPORT_DSN'), ['vhost' => $container->getEnv('string:MESSENGER_VHOST'), 'exchange' => ['name' => $container->getEnv('string:MESSENGER_EXCHANGE'), 'type' => 'direct'], 'queues' => ['user_queue' => ['binding_keys' => [0 => 'user_queue']]], 'auto_setup' => true, 'transport_name' => 'amqp_user'], ($container->privates['Mailer\\Serializer\\Messenger\\EventSerializer'] ?? $container->load('getEventSerializerService')));
    }
}

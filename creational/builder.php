<?php
interface Socket
{}

interface SocketBuilderInterface
{
    public function setType(string $type): self;
    public function setBlocking(bool $isBlocking): self;
    public function setProtocol(string $protocol): self;
    public function create(): Socket;
}


class InetSocket implements Socket
{}
class UnixSocket implements Socket
{}

class InetSocketBuilder implements SocketBuilderInterface
{
    public function setType(string $type): self
    {
        return $this;
    }

    public function setProtocol(string $protocol): self
    {
        return $this;
    }

    public function setBlocking(bool $isBlocking = true): self
    {
        return $this;
    }

    public function create(): InetSocket
    {
        return new InetSocket();
    }
}

class UnixSocketBuilder implements SocketBuilderInterface
{

    public function setType(string $type): self
    {
        
        return $this;
    }

    public function setProtocol(string $protocol): self
    {
        
        return $this;
    }

    public function setBlocking(bool $isBlocking = true): self
    {
        
        return $this;
    }

    public function create(): UnixSocket
    {
        return new UnixSocket();
    }
}

class SocketBuilderDirector
{
    function __construct()
    {
        
    }

    public function createInetSocket(SocketBuilderInterface $builder): InetSocket
    {
        // ....do common calls
        return $builder->create();
    }

    public function createUnixSocket(SocketBuilderInterface $builder): UnixSocket
    {
        // ....do common calls
        return $builder->create();
    }
}
?>

<h1>Builder</h1>
<p>
    is a creatinal design pattern that lets you construct complex objects step by step. The pattern allows you to produce different types and representations of an object using the same construction code.
</p>

<pre>
interface Socket
{}

interface SocketBuilderInterface
{
    public function setType(string $type): self;
    public function setBlocking(bool $isBlocking): self;
    public function setProtocol(string $protocol): self;
    public function create(): Socket;
}


class InetSocket implements Socket
{}
class UnixSocket implements Socket
{}

class InetSocketBuilder implements SocketBuilderInterface
{
    public function setType(string $type): self
    {
        return $this;
    }

    public function setProtocol(string $protocol): self
    {
        return $this;
    }

    public function setBlocking(bool $isBlocking = true): self
    {
        return $this;
    }

    public function create(): InetSocket
    {
        return new InetSocket();
    }
}

class UnixSocketBuilder implements SocketBuilderInterface
{

    public function setType(string $type): self
    {
        
        return $this;
    }

    public function setProtocol(string $protocol): self
    {
        
        return $this;
    }

    public function setBlocking(bool $isBlocking = true): self
    {
        
        return $this;
    }

    public function create(): UnixSocket
    {
        return new UnixSocket();
    }
}

class SocketBuilderDirector
{
    function __construct()
    {
        
    }

    public function createInetSocket(SocketBuilderInterface $builder): InetSocket
    {
        // ....do common calls
        return $builder->create();
    }

    public function createUnixSocket(SocketBuilderInterface $builder): UnixSocket
    {
        // ....do common calls
        return $builder->create();
    }
}
</pre>

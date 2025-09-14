<?php
interface TableInterface
{
    public function filterRows();
}

interface PageInterface
{
    public function render(): string;
    public function createTable(): TableInterface;
}


abstract class AbstractPage implements PageInterface
{
    public function __construct()
    {
    }

    public function render(): string
    {
        return "html";
    }
}

class AboutTable implements TableInterface
{
    public function filterRows()
    {
        echo "filter";
    }
}

class PricesTable implements TableInterface
{
    public function filterRows()
    {
        echo "filter prices";
    }
}

class AboutPage extends AbstractPage
{
    public function createTable(): TableInterface
    {
        return new AboutTable();
    }
}

class PricesPage extends AbstractPage
{
    public function createTable(): TableInterface
    {
        return new PricesTable();
    }
}
?>

<h1>Factory Method</h1>

<p>
    is a creational design pattern that provices an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.
</p>

<pre>
interface TableInterface
{
    public function filterRows();
}

interface PageInterface
{
    public function render(): string;
    public function createTable(): TableInterface;
}


abstract class AbstractPage implements PageInterface
{
    public function __construct()
    {
    }

    public function render(): string
    {
        return "html";
    }
}

class AboutTable implements TableInterface
{
    public function filterRows()
    {
        echo "filter";
    }
}

class PricesTable implements TableInterface
{
    public function filterRows()
    {
        echo "filter prices";
    }
}

class AboutPage extends AbstractPage
{
    public function createTable(): TableInterface
    {
        return new AboutTable();
    }
}

class PricesPage extends AbstractPage
{
    public function createTable(): TableInterface
    {
        return new PricesTable();
    }
}
</pre>

<h3>Applicability</h3>
<p>
    Use the Factory Method when you don't know beforehand the exact types and deps of the objects your code should work with
</p>

<p>
    Use the Factory Method when you want to provice users of your library of framework with a way to extend its internal components
</p>

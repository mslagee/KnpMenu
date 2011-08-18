<?php

namespace Knp\Menu;

/**
 * Interface implemented by a node to construct a menu from a tree.
 */
interface NodeInterface
{
    /**
     * Get the name of the node
     *
     * Each child of a node must have a unique name
     *
     * @return string
     */
    function getName();

    /**
     * Get the label of the link
     *
     * @return string
     */
    function getLabel();

    /**
     * Get the uri of the link
     *
     * @return string
     */
    function getUri();

    /**
     * Get the attributes of the MenuItem generated by this node
     *
     * @return array
     */
    function getAttributes();

    /**
     * Get the child nodes implementing NodeInterface
     *
     * @return \Traversable a collection of NodeInterface instances
     */
    function getChildren();
}
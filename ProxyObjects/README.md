###  Proxy Objects

The module covers how to use proxy classes which extends other classes to become lazy-loaded versions of them.
Click on the link to know more about the <a href="https://en.wikipedia.org/w£iki/Proxy_pattern" target="_blank">proxy patterns</a>

##### URL
{base_url}/proxy/index/index

In the example we initilized a proxy class/object via di.xml which replace the original class SlowLoading.
Through proxy class which is a lazy load version of slowLoading class, the slowLoading class will only be injected when we need it (i.e. when we call any method within the SlowLoading class),
otherwise it will never be called, no matters if it's automatically injected via constructor.
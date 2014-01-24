
package datentypen;

public class WrapperKlassen {
    // Kapselung von primitiven Datentypen
    
    int i = 12;
    String s = "12";
    
    Integer iObj = new Integer(i);
    Integer sObj = new Integer(s);
    
    // Rückformulierung in primitiven Datentyp:
    int n = sObj.intValue();
    
    // Direkte Umformulierung:
    Integer i2Obj = Integer.parseInt("25");
}
